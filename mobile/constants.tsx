
import React from 'react';
import { 
  FolderKanban, 
  Banknote, 
  Wallet, 
  CreditCard, 
  Percent, 
  AlertTriangle 
} from 'lucide-react';

export const COLORS = {
  primary: '#003366',
  primaryLight: '#004d99',
  gold: '#b8860b',
  goldLight: '#daa520',
  red: '#c41e3a',
  success: '#10b981',
  warning: '#f59e0b',
  danger: '#ef4444',
  gray: '#6b7280',
  background: '#f9fafb'
};

export const SECTORS = [
  "Tous",
  "Infrastructure",
  "Santé",
  "Éducation",
  "Énergie",
  "Agriculture",
  "Hydraulique"
];

export const KPI_CONFIG = [
  {
    key: 'projects',
    label: 'Projets Total',
    value: '147',
    sublabel: '🟢 89 en cours',
    trend: '+12%',
    trendDirection: 'up',
    colorClass: 'bg-blue-50 text-blue-700',
    icon: <FolderKanban className="w-5 h-5" />
  },
  {
    key: 'budget',
    label: 'Budget Total',
    value: '842 Mds',
    sublabel: 'LFI 2024',
    trend: '+8%',
    trendDirection: 'up',
    colorClass: 'bg-amber-50 text-amber-700',
    icon: <Banknote className="w-5 h-5" />
  },
  {
    key: 'engaged',
    label: 'Engagé',
    value: '623 Mds',
    sublabel: '74% du total',
    trend: '+15%',
    trendDirection: 'up',
    colorClass: 'bg-emerald-50 text-emerald-700',
    icon: <Wallet className="w-5 h-5" />
  },
  {
    key: 'alerts',
    label: 'Alertes',
    value: '23',
    sublabel: 'Retards signalés',
    colorClass: 'bg-red-50 text-red-700',
    icon: <AlertTriangle className="w-5 h-5" />
  }
];
