
import React, { useState, useEffect, useMemo } from 'react';
import { 
  Bell, 
  Search, 
  TrendingUp, 
  TrendingDown, 
  Clock, 
  Filter, 
  ArrowRight,
  Plus,
  ChevronDown
} from 'lucide-react';
import { 
  ResponsiveContainer, 
  LineChart, 
  Line, 
  XAxis, 
  CartesianGrid, 
  Tooltip 
} from 'recharts';

import ProjectCard from './components/ProjectCard';
import BottomNav from './components/BottomNav';
import ProjectModal from './components/ProjectModal';
import GeminiBriefing from './components/GeminiBriefing';
import { projectsData, executionTrendData } from './services/data';
import { KPI_CONFIG, COLORS, SECTORS } from './constants';
import { Project } from './types';

const App: React.FC = () => {
  const [activeTab, setActiveTab] = useState('dashboard');
  const [searchQuery, setSearchQuery] = useState('');
  const [selectedSector, setSelectedSector] = useState('Tous');
  const [selectedProject, setSelectedProject] = useState<Project | null>(null);
  const [isLoaded, setIsLoaded] = useState(false);

  useEffect(() => {
    const timer = setTimeout(() => setIsLoaded(true), 100);
    return () => clearTimeout(timer);
  }, []);

  const filteredProjects = useMemo(() => {
    return projectsData.filter(p => {
      const matchesSearch = p.name.toLowerCase().includes(searchQuery.toLowerCase()) ||
                          p.id.toLowerCase().includes(searchQuery.toLowerCase());
      const matchesSector = selectedSector === 'Tous' || p.sector === selectedSector;
      return matchesSearch && matchesSector;
    });
  }, [searchQuery, selectedSector]);

  const renderDashboard = () => (
    <div className={`space-y-6 transition-all duration-700 pb-12 ${isLoaded ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'}`}>
      {/* Top Header */}
      <div className="flex justify-between items-center px-1">
        <div>
          <h1 className="text-xl font-bold text-[#001a33] font-display">Direction Générale</h1>
          <p className="text-[10px] text-gray-500 font-bold uppercase tracking-widest flex items-center gap-1">
            <span className="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse" /> Système Synchronisé
          </p>
        </div>
        <div className="flex gap-2">
          <button className="bg-white p-2.5 rounded-xl shadow-sm border border-gray-100 relative active:scale-95 transition-all">
            <Bell className="w-5 h-5 text-gray-400" />
            <span className="absolute top-2 right-2 w-2 h-2 bg-[#c41e3a] rounded-full border-2 border-white"></span>
          </button>
        </div>
      </div>

      {/* AI Intelligence Section */}
      <GeminiBriefing projects={projectsData} />

      {/* Stats Summary - Horizontal Scroll */}
      <div className="flex overflow-x-auto no-scrollbar gap-4 -mx-5 px-5 pb-2">
        {KPI_CONFIG.map((kpi) => (
          <div 
            key={kpi.key}
            className="flex-shrink-0 w-44 bg-white p-4 rounded-2xl shadow-sm border border-gray-100"
          >
            <div className="flex justify-between items-start mb-2">
              <div className={`p-2 rounded-xl ${kpi.colorClass}`}>
                {kpi.icon}
              </div>
              {kpi.trend && (
                <div className={`flex items-center text-[10px] font-bold ${kpi.trendDirection === 'up' ? 'text-emerald-500' : 'text-red-500'}`}>
                  {kpi.trendDirection === 'up' ? <TrendingUp className="w-3 h-3 mr-0.5" /> : <TrendingDown className="w-3 h-3 mr-0.5" />}
                  {kpi.trend}
                </div>
              )}
            </div>
            <div className="text-xl font-bold text-[#003366]">{kpi.value}</div>
            <div className="text-[10px] font-bold text-gray-400 uppercase tracking-wider">{kpi.label}</div>
            <div className="text-[9px] text-gray-500 mt-2 truncate">
              {kpi.sublabel}
            </div>
          </div>
        ))}
      </div>

      {/* Charts Section */}
      <div className="bg-white p-5 rounded-2xl shadow-sm border border-gray-100">
        <div className="flex justify-between items-center mb-6">
          <h3 className="text-sm font-bold text-[#001a33] font-display">Taux d'Exécution Physique</h3>
          <div className="flex items-center gap-1 text-[10px] font-bold text-[#b8860b] uppercase">
            S2 2024 <ChevronDown className="w-3 h-3" />
          </div>
        </div>
        <div className="h-[140px] w-full">
          <ResponsiveContainer width="100%" height="100%">
            <LineChart data={executionTrendData}>
              <CartesianGrid strokeDasharray="3 3" vertical={false} stroke="#f1f5f9" />
              <XAxis dataKey="name" axisLine={false} tickLine={false} tick={{ fontSize: 9, fill: '#94a3b8' }} />
              <Tooltip contentStyle={{ borderRadius: '12px', border: 'none', fontSize: '10px' }} />
              <Line type="monotone" dataKey="real" stroke={COLORS.success} strokeWidth={3} dot={{ r: 3, fill: COLORS.success }} />
              <Line type="monotone" dataKey="pre" stroke={COLORS.primary} strokeWidth={2} strokeDasharray="5 5" dot={false} />
            </LineChart>
          </ResponsiveContainer>
        </div>
      </div>

      {/* Critical List Preview */}
      <div className="space-y-4">
        <div className="flex justify-between items-center px-1">
          <h3 className="text-[11px] font-bold text-gray-400 uppercase tracking-widest">Surveillance Prioritaire</h3>
          <button onClick={() => setActiveTab('projects')} className="text-[11px] font-bold text-[#004d99] flex items-center gap-1">
            Voir portefeuille <ArrowRight className="w-3 h-3" />
          </button>
        </div>
        <div className="space-y-3">
          {projectsData.slice(0, 2).map((project) => (
            <ProjectCard key={project.id} project={project} onClick={(p) => setSelectedProject(p)} />
          ))}
        </div>
      </div>
    </div>
  );

  const renderProjects = () => (
    <div className="space-y-4 pb-20 animate-in fade-in slide-in-from-bottom-2">
      <div className="sticky top-0 bg-[#f9fafb]/95 backdrop-blur-md pt-2 pb-4 z-20">
        <h2 className="text-xl font-bold text-[#001a33] font-display mb-4">Portefeuille National</h2>
        <div className="flex gap-2 mb-4">
          <div className="flex-1 bg-white border border-gray-200 rounded-2xl px-4 py-3 flex items-center gap-3 shadow-sm">
            <Search className="w-4 h-4 text-gray-400" />
            <input 
              type="text" 
              placeholder="Rechercher par ID ou nom..." 
              className="bg-transparent text-sm w-full outline-none font-medium"
              value={searchQuery}
              onChange={(e) => setSearchQuery(e.target.value)}
            />
          </div>
          <button className="bg-[#003366] p-3 rounded-2xl shadow-lg active:scale-90 transition-all">
            <Filter className="w-5 h-5 text-white" />
          </button>
        </div>
        
        {/* Sector Filter Chips */}
        <div className="flex overflow-x-auto no-scrollbar gap-2 -mx-5 px-5">
          {SECTORS.map((sector) => (
            <button
              key={sector}
              onClick={() => setSelectedSector(sector)}
              className={`whitespace-nowrap px-4 py-2 rounded-xl text-[11px] font-bold uppercase tracking-wider transition-all ${
                selectedSector === sector 
                  ? 'bg-[#b8860b] text-white shadow-md' 
                  : 'bg-white text-gray-400 border border-gray-100'
              }`}
            >
              {sector}
            </button>
          ))}
        </div>
      </div>

      <div className="space-y-3">
        {filteredProjects.length > 0 ? (
          filteredProjects.map((project) => (
            <ProjectCard key={project.id} project={project} onClick={(p) => setSelectedProject(p)} />
          ))
        ) : (
          <div className="text-center py-16 bg-white rounded-3xl border border-dashed border-gray-200">
            <div className="bg-gray-50 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
              <Search className="w-8 h-8 text-gray-200" />
            </div>
            <p className="text-gray-400 font-bold text-sm">Aucun résultat</p>
          </div>
        )}
      </div>

      <button className="fixed right-6 bottom-24 bg-[#003366] text-white p-4 rounded-full shadow-2xl active:scale-90 transition-all z-40 border-4 border-white">
        <Plus className="w-6 h-6" />
      </button>
    </div>
  );

  return (
    <div className="min-h-screen bg-[#f9fafb] select-none">
      {/* Visual Identity Strip */}
      <div className="h-1 bg-gradient-to-r from-[#003366] via-[#daa520] to-[#c41e3a] fixed top-0 left-0 right-0 z-[60]" />
      
      <main className="px-5 pt-8 max-w-md mx-auto">
        {activeTab === 'dashboard' && renderDashboard()}
        {activeTab === 'projects' && renderProjects()}
        {activeTab === 'alerts' && (
           <div className="space-y-6 pt-2 pb-20">
             <h2 className="text-xl font-bold text-[#001a33] font-display">Centre de Notifications</h2>
             <div className="space-y-4">
               {[
                 { title: "Alerte de Retard", desc: "Le Pont de Ngueli a dépassé le délai contractuel de la phase 2.", type: 'critical', date: 'Aujourd\'hui' },
                 { title: "Nouveau Rapport", desc: "Audit environnemental disponible pour Irrigation Bongor.", type: 'info', date: 'Hier' },
               ].map((item, i) => (
                 <div key={i} className="bg-white p-4 rounded-2xl shadow-sm border border-gray-100 flex gap-4">
                   <div className={`w-1.5 rounded-full ${item.type === 'critical' ? 'bg-red-500' : 'bg-blue-500'}`} />
                   <div>
                     <div className="flex justify-between items-center mb-1">
                       <h4 className="text-sm font-bold text-[#001a33]">{item.title}</h4>
                       <span className="text-[10px] text-gray-400 font-bold">{item.date}</span>
                     </div>
                     <p className="text-xs text-gray-500 leading-relaxed">{item.desc}</p>
                   </div>
                 </div>
               ))}
             </div>
           </div>
        )}
        {activeTab === 'profile' && (
           <div className="pt-10 space-y-8 pb-20">
              <div className="flex flex-col items-center">
                 <div className="w-24 h-24 bg-white border-2 border-[#b8860b] p-1 rounded-3xl shadow-xl">
                    <div className="w-full h-full bg-[#003366] rounded-2xl flex items-center justify-center">
                       <span className="text-2xl font-bold text-white font-display">AM</span>
                    </div>
                 </div>
                 <h2 className="text-xl font-bold text-[#001a33] mt-4">Amadou Mahamat</h2>
                 <p className="text-xs font-bold text-[#b8860b] uppercase tracking-widest">Contrôleur de l'État</p>
              </div>
              <div className="bg-white rounded-3xl p-2 shadow-sm border border-gray-100">
                {['Documents Officiels', 'Paramètres de Sécurité', 'Support Technique', 'Déconnexion'].map((label, i) => (
                  <div key={i} className={`p-4 text-sm font-bold flex justify-between items-center ${i === 3 ? 'text-red-500' : 'text-gray-700 border-b border-gray-50'}`}>
                    {label} <ArrowRight className="w-4 h-4 text-gray-300" />
                  </div>
                ))}
              </div>
           </div>
        )}
      </main>

      <BottomNav activeTab={activeTab} setActiveTab={setActiveTab} />
      
      <ProjectModal 
        project={selectedProject} 
        onClose={() => setSelectedProject(null)} 
      />
    </div>
  );
};

export default App;
