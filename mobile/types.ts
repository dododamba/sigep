
export type ProjectStatus = 'ok' | 'warning' | 'critical';

export interface Project {
  id: string;
  name: string;
  sector: string;
  sectorKey: string;
  region: string;
  progress: number;
  budget: number;
  budgetDisplay: string;
  partners: string[];
  company: string;
  status: ProjectStatus;
  statusLabel: string;
  description?: string;
}

export interface KPIData {
  value: string | number;
  label: string;
  sublabel: string;
  trend?: string;
  trendDirection?: 'up' | 'down';
  colorClass: string;
  iconName: string;
}
