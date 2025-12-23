
import { Project } from '../types';

export const projectsData: Project[] = [
  {
    id: "PRJ-2024-0042",
    name: "Construction du Pont de Ngueli",
    sector: "Infrastructure",
    sectorKey: "infrastructure",
    region: "N'Djamena",
    progress: 67,
    budget: 72300000000,
    budgetDisplay: "72,3 Mds",
    partners: ["BAD", "UE", "État"],
    company: "SOGEA-SATOM",
    status: "warning",
    statusLabel: "Alerte",
    description: "Construction d'un pont à haubans de 450 mètres reliant N'Djamena à la ville de Ngueli au Cameroun."
  },
  {
    id: "PRJ-2024-0038",
    name: "Réhabilitation Hôpital Général",
    sector: "Santé",
    sectorKey: "sante",
    region: "N'Djamena",
    progress: 85,
    budget: 18500000000,
    budgetDisplay: "18,5 Mds",
    partners: ["BM", "OMS"],
    company: "COLAS Tchad",
    status: "ok",
    statusLabel: "OK",
    description: "Modernisation des plateaux techniques et rénovation des bâtiments principaux de l'hôpital de référence."
  },
  {
    id: "PRJ-2024-0055",
    name: "Programme Éducation de Base",
    sector: "Éducation",
    sectorKey: "education",
    region: "Logone Oriental",
    progress: 42,
    budget: 8200000000,
    budgetDisplay: "8,2 Mds",
    partners: ["AFD", "UNICEF"],
    company: "BATI-PLUS",
    status: "ok",
    statusLabel: "OK",
    description: "Construction de 50 salles de classe et formation du personnel enseignant dans les zones rurales."
  },
  {
    id: "PRJ-2024-0061",
    name: "Électrification Rurale Zone Est",
    sector: "Énergie",
    sectorKey: "energie",
    region: "Ouaddaï",
    progress: 23,
    budget: 15800000000,
    budgetDisplay: "15,8 Mds",
    partners: ["BID", "État"],
    company: "VERGNET",
    status: "critical",
    statusLabel: "Critique",
    description: "Déploiement de micro-réseaux solaires pour 12 localités du Ouaddaï."
  },
  {
    id: "PRJ-2023-0089",
    name: "Irrigation Bongor",
    sector: "Agriculture",
    sectorKey: "agriculture",
    region: "Mayo-Kebbi Est",
    progress: 91,
    budget: 12400000000,
    budgetDisplay: "12,4 Mds",
    partners: ["FIDA", "BAD"],
    company: "SATOM-AGRI",
    status: "ok",
    statusLabel: "OK",
    description: "Aménagement de 2000 hectares de périmètres irrigués pour la riziculture."
  }
];

export const executionTrendData = [
  { name: 'Jan', pre: 70, real: 45 },
  { name: 'Mar', pre: 210, real: 150 },
  { name: 'Mai', pre: 350, real: 255 },
  { name: 'Jul', pre: 490, real: 345 },
  { name: 'Sep', pre: 630, real: 395 },
  { name: 'Nov', pre: 770, real: 415 },
  { name: 'Déc', pre: 842, real: 418 },
];

export const partnerDistributionData = [
  { name: 'BAD', value: 185 },
  { name: 'UE', value: 142 },
  { name: 'BM', value: 128 },
  { name: 'AFD', value: 96 },
  { name: 'État', value: 186 },
];
