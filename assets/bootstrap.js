import { startStimulusApp } from '@symfony/stimulus-bridge';
import '@symfony/ux-turbo'; // Active Turbo et les Frames/Streams

// Charge automatiquement les contrôleurs Stimulus dans assets/controllers
export const app = startStimulusApp(
    require.context('./controllers', true, /\.(j|t)sx?$/)
);