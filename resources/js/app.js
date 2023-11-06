import 'alpinejs';
import focus from '@alpinejs/focus';
import { Modal, Ripple, initTE } from "tw-elements";

window.Alpine = Alpine;
Alpine.plugin(focus);

// Initialize tw-elements with components
initTE({ Modal, Ripple });

Alpine.start();

