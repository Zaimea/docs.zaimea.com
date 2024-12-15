import Alpine from 'alpinejs';
import Focus from '@alpinejs/focus';

import { listen } from "quicklink";

import './clipboard';
import './nav'
import './theme'

import.meta.glob([
    '../images/**',
  ]);

window.Alpine = Alpine;

Alpine.plugin(Focus);
Alpine.start();

window.addEventListener('load', () => { listen(); });
