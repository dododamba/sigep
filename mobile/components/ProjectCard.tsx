
import React from 'react';
import { ChevronRight, MapPin, Building, AlertCircle, CheckCircle, XCircle } from 'lucide-react';
import { Project } from '../types';

interface ProjectCardProps {
  project: Project;
  onClick: (project: Project) => void;
}

const ProjectCard: React.FC<ProjectCardProps> = ({ project, onClick }) => {
  const getStatusIcon = () => {
    switch (project.status) {
      case 'ok': return <CheckCircle className="w-4 h-4 text-emerald-500" />;
      case 'warning': return <AlertCircle className="w-4 h-4 text-amber-500" />;
      case 'critical': return <XCircle className="w-4 h-4 text-red-500" />;
    }
  };

  const getProgressColor = () => {
    if (project.progress >= 70) return 'bg-emerald-500';
    if (project.progress >= 40) return 'bg-amber-500';
    return 'bg-red-500';
  };

  return (
    <div 
      onClick={() => onClick(project)}
      className="bg-white rounded-xl p-4 shadow-sm border border-gray-100 active:bg-gray-50 transition-colors mb-3 flex flex-col gap-3"
    >
      <div className="flex justify-between items-start">
        <div className="flex flex-col">
          <span className="text-[10px] font-bold text-[#b8860b] tracking-wider uppercase">{project.id}</span>
          <h3 className="text-sm font-bold text-[#001a33] line-clamp-1">{project.name}</h3>
        </div>
        <div className="flex items-center gap-1 bg-gray-50 px-2 py-1 rounded-md">
          {getStatusIcon()}
          <span className="text-[10px] font-bold text-gray-600 uppercase">{project.statusLabel}</span>
        </div>
      </div>

      <div className="flex gap-3 text-[11px] text-gray-500">
        <div className="flex items-center gap-1">
          <Building className="w-3 h-3" />
          <span>{project.sector}</span>
        </div>
        <div className="flex items-center gap-1">
          <MapPin className="w-3 h-3" />
          <span>{project.region}</span>
        </div>
      </div>

      <div className="space-y-1">
        <div className="flex justify-between items-end text-[10px] mb-1">
          <span className="font-medium text-gray-400">Avancement</span>
          <span className="font-bold text-[#003366]">{project.progress}%</span>
        </div>
        <div className="w-full h-1.5 bg-gray-100 rounded-full overflow-hidden">
          <div 
            className={`h-full ${getProgressColor()} transition-all duration-500`} 
            style={{ width: `${project.progress}%` }} 
          />
        </div>
      </div>

      <div className="flex justify-between items-center pt-2 border-t border-gray-50">
        <div className="flex flex-col">
          <span className="text-[10px] text-gray-400">Budget</span>
          <span className="text-xs font-bold text-[#003366]">{project.budgetDisplay} FCFA</span>
        </div>
        <button className="flex items-center text-[#004d99] text-xs font-bold gap-1">
          Détails <ChevronRight className="w-4 h-4" />
        </button>
      </div>
    </div>
  );
};

export default ProjectCard;
