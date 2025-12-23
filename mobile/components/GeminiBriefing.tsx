
import React, { useState, useEffect } from 'react';
import { Sparkles, Loader2, RefreshCw } from 'lucide-react';
import { GoogleGenAI } from "@google/genai";
import { Project } from '../types';

interface GeminiBriefingProps {
  projects: Project[];
}

const GeminiBriefing: React.FC<GeminiBriefingProps> = ({ projects }) => {
  const [briefing, setBriefing] = useState<string>("");
  const [loading, setLoading] = useState(false);

  const generateBriefing = async () => {
    setLoading(true);
    try {
      const ai = new GoogleGenAI({ apiKey: process.env.API_KEY });
      const criticalProjects = projects.filter(p => p.status === 'critical').length;
      const warningProjects = projects.filter(p => p.status === 'warning').length;
      
      const prompt = `En tant qu'assistant IA expert pour le gouvernement du Tchad, rédige un bref résumé exécutif (2-3 phrases max) de l'état actuel du portefeuille de projets.
      Données : ${projects.length} projets au total, ${criticalProjects} en état critique, ${warningProjects} sous alerte.
      Le ton doit être professionnel, sobre et direct. Focus sur les risques financiers et les retards.`;

      const response = await ai.models.generateContent({
        model: 'gemini-3-flash-preview',
        contents: prompt,
      });

      setBriefing(response.text || "Erreur de génération.");
    } catch (error) {
      console.error(error);
      setBriefing("Impossible de charger le briefing IA pour le moment.");
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    generateBriefing();
  }, []);

  return (
    <div className="bg-gradient-to-br from-[#003366] to-[#001a33] rounded-2xl p-4 shadow-lg relative overflow-hidden">
      <div className="absolute top-0 right-0 p-3 opacity-10">
        <Sparkles className="w-12 h-12 text-white" />
      </div>
      
      <div className="flex justify-between items-center mb-2">
        <div className="flex items-center gap-2 text-white/90 text-xs font-bold uppercase tracking-widest">
          <Sparkles className="w-3.5 h-3.5 text-[#daa520]" />
          Briefing Exécutif IA
        </div>
        <button 
          onClick={generateBriefing}
          className="text-white/40 active:rotate-180 transition-transform duration-500"
          disabled={loading}
        >
          {loading ? <Loader2 className="w-3.5 h-3.5 animate-spin" /> : <RefreshCw className="w-3.5 h-3.5" />}
        </button>
      </div>

      <div className="min-h-[60px] flex items-center">
        {loading ? (
          <div className="flex flex-col gap-2 w-full">
            <div className="h-2 bg-white/10 rounded-full w-full animate-pulse" />
            <div className="h-2 bg-white/10 rounded-full w-3/4 animate-pulse" />
          </div>
        ) : (
          <p className="text-white/90 text-[13px] leading-relaxed font-medium">
            {briefing}
          </p>
        )}
      </div>
    </div>
  );
};

export default GeminiBriefing;
