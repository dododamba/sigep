
import React, { useState } from 'react';
import { X, MapPin, Hash, Building2, Calendar, FileText, Target, Users, Gauge } from 'lucide-react';
import { Project } from '../types';

interface ProjectModalProps {
  project: Project | null;
  onClose: () => void;
}

const ProjectModal: React.FC<ProjectModalProps> = ({ project, onClose }) => {
  const [activeTab, setActiveTab] = useState('general');

  if (!project) return null;

  const tabs = [
    { id: 'general', label: 'Général' },
    { id: 'timeline', label: 'Suivi' },
    { id: 'finance', label: 'Finance' },
    { id: 'companies', label: 'Acteurs' },
  ];

  return (
    <div className="fixed inset-0 z-[100] bg-black/60 backdrop-blur-sm flex flex-col justify-end transition-opacity duration-300">
      <div 
        className="absolute inset-0" 
        onClick={onClose} 
      />
      <div className="bg-white rounded-t-3xl w-full max-h-[92vh] flex flex-col relative animate-in slide-in-from-bottom duration-300">
        
        {/* Header Decorator */}
        <div className="w-12 h-1 bg-gray-200 rounded-full mx-auto my-3" onClick={onClose} />
        
        {/* Project Header */}
        <div className="px-5 pb-4 border-b border-gray-100">
          <div className="flex justify-between items-start mb-2">
            <div>
              <h2 className="text-lg font-bold text-[#001a33] font-display">{project.name}</h2>
              <div className="flex flex-wrap gap-3 mt-1 text-[11px] text-gray-500">
                <span className="flex items-center gap-1"><Hash className="w-3 h-3 text-[#b8860b]" /> {project.id}</span>
                <span className="flex items-center gap-1"><MapPin className="w-3 h-3 text-[#b8860b]" /> {project.region}</span>
                <span className="flex items-center gap-1"><Building2 className="w-3 h-3 text-[#b8860b]" /> {project.sector}</span>
              </div>
            </div>
            <button 
              onClick={onClose}
              className="p-2 bg-gray-100 rounded-full text-gray-500 active:scale-95 transition-transform"
            >
              <X className="w-5 h-5" />
            </button>
          </div>
        </div>

        {/* Horizontal Tabs */}
        <div className="px-5 pt-3 overflow-x-auto no-scrollbar flex border-b border-gray-100">
          {tabs.map((tab) => (
            <button
              key={tab.id}
              onClick={() => setActiveTab(tab.id)}
              className={`whitespace-nowrap px-4 py-2 text-xs font-bold uppercase tracking-wider border-b-2 transition-all mr-2 ${
                activeTab === tab.id 
                  ? 'border-[#004d99] text-[#004d99]' 
                  : 'border-transparent text-gray-400'
              }`}
            >
              {tab.label}
            </button>
          ))}
        </div>

        {/* Tab Content */}
        <div className="flex-1 overflow-y-auto px-5 py-6">
          {activeTab === 'general' && (
            <div className="space-y-6">
              <section>
                <div className="flex items-center gap-2 mb-2 text-[#003366] font-bold">
                  <FileText className="w-4 h-4" />
                  <h4 className="text-sm">Description</h4>
                </div>
                <p className="text-sm text-gray-600 leading-relaxed">
                  {project.description || "Aucune description détaillée disponible pour le moment."}
                </p>
              </section>

              <div className="grid grid-cols-1 gap-4">
                <div className="bg-gray-50 p-4 rounded-xl border border-gray-100">
                   <div className="flex items-center gap-2 mb-3 text-[#b8860b] font-bold">
                    <Gauge className="w-4 h-4" />
                    <h4 className="text-xs uppercase">Performance</h4>
                  </div>
                  <div className="space-y-3">
                    <div className="flex justify-between items-center text-xs">
                      <span className="text-gray-500">Avancement physique</span>
                      <span className="font-bold text-[#003366]">{project.progress}%</span>
                    </div>
                    <div className="flex justify-between items-center text-xs">
                      <span className="text-gray-500">Taux décaissement</span>
                      <span className="font-bold text-[#003366]">72%</span>
                    </div>
                  </div>
                </div>

                <div className="bg-gray-50 p-4 rounded-xl border border-gray-100">
                   <div className="flex items-center gap-2 mb-3 text-[#b8860b] font-bold">
                    <Calendar className="w-4 h-4" />
                    <h4 className="text-xs uppercase">Calendrier</h4>
                  </div>
                  <div className="space-y-3">
                    <div className="flex justify-between items-center text-xs">
                      <span className="text-gray-500">Démarrage</span>
                      <span className="font-bold">15/03/2023</span>
                    </div>
                    <div className="flex justify-between items-center text-xs">
                      <span className="text-gray-500">Fin prévue</span>
                      <span className="font-bold">30/06/2025</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          )}

          {activeTab === 'timeline' && (
            <div className="space-y-6 relative ml-4 border-l border-blue-100 pl-6 pb-4">
              {[
                { label: 'Études APD', date: 'Août 2023', status: 'done' },
                { label: 'Passation Marché', date: 'Oct 2023', status: 'done' },
                { label: 'Travaux Génie Civil', date: 'En cours', status: 'current' },
                { label: 'Finitions', date: 'Prévu Mars 2025', status: 'pending' },
              ].map((step, idx) => (
                <div key={idx} className="relative">
                  <div className={`absolute -left-[31px] top-1 w-2.5 h-2.5 rounded-full border-2 bg-white ${
                    step.status === 'done' ? 'border-emerald-500 bg-emerald-500' :
                    step.status === 'current' ? 'border-amber-500 animate-pulse' : 'border-gray-200'
                  }`} />
                  <div className="flex justify-between items-start mb-1">
                    <h5 className="text-sm font-bold text-[#003366]">{step.label}</h5>
                    <span className="text-[10px] font-medium text-[#b8860b]">{step.date}</span>
                  </div>
                  <p className="text-xs text-gray-500">Description succincte de l'étape du projet public.</p>
                </div>
              ))}
            </div>
          )}

          {activeTab === 'finance' && (
             <div className="space-y-4">
               <div className="bg-blue-900 text-white p-5 rounded-2xl shadow-lg relative overflow-hidden">
                  <div className="absolute top-[-20%] right-[-10%] w-32 h-32 bg-white/5 rounded-full blur-xl" />
                  <span className="text-[10px] uppercase font-bold opacity-70 tracking-widest">Montant Total</span>
                  <div className="text-2xl font-bold mt-1 font-display">{project.budgetDisplay} FCFA</div>
                  <div className="mt-4 pt-4 border-t border-white/10 flex justify-between">
                    <div>
                      <span className="text-[10px] opacity-60 block">Décaissé</span>
                      <span className="text-sm font-bold">52,0 Mds</span>
                    </div>
                    <div className="text-right">
                      <span className="text-[10px] opacity-60 block">Reste</span>
                      <span className="text-sm font-bold">20,3 Mds</span>
                    </div>
                  </div>
               </div>
               
               <div className="space-y-2 mt-4">
                 <h4 className="text-xs font-bold text-gray-400 uppercase tracking-widest px-1">Répartition</h4>
                 {project.partners.map((p, i) => (
                   <div key={i} className="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                     <span className="text-sm font-bold text-[#003366]">{p}</span>
                     <span className="text-xs font-medium px-2 py-0.5 bg-white border border-gray-100 rounded-md text-[#b8860b]">Contribution</span>
                   </div>
                 ))}
               </div>
             </div>
          )}

          {activeTab === 'companies' && (
            <div className="space-y-4">
              <div className="p-4 border border-blue-100 rounded-xl bg-blue-50/30">
                <span className="text-[10px] font-bold text-[#003366] uppercase">Entreprise Titulaire</span>
                <h5 className="text-lg font-bold text-[#001a33] mt-1">{project.company}</h5>
                <p className="text-xs text-gray-500 mt-1">N° Contrat : CTR-2024-CH-8427</p>
              </div>
              
              <div className="space-y-3">
                 <h4 className="text-xs font-bold text-gray-400 uppercase tracking-widest px-1">Bureau de Contrôle</h4>
                 <div className="p-4 border border-gray-100 rounded-xl">
                    <h5 className="text-sm font-bold text-[#003366]">Bureau Veritas Construction</h5>
                    <p className="text-xs text-gray-500 mt-1">Mission de surveillance technique et environnementale.</p>
                 </div>
              </div>
            </div>
          )}
        </div>

        {/* Action Button */}
        <div className="p-5 border-t border-gray-100 pb-safe">
           <button className="w-full bg-[#003366] text-white font-bold py-4 rounded-2xl active:scale-95 transition-all shadow-md">
             Générer un rapport PDF
           </button>
        </div>
      </div>
    </div>
  );
};

export default ProjectModal;
