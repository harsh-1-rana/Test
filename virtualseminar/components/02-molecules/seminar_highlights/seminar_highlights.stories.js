import seminartwig from './seminar_highlights.twig';
import seminaryml from './seminar_highlights.yml';
import './_seminar_highlights.scss';

// import './https:/cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js: {}';
// import './https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css: {}';
import '../../../node_modules/@fancyapps/fancybox/dist/jquery.fancybox';
import '../../../node_modules/@fancyapps/fancybox/dist/jquery.fancybox.css';

export default { title: 'Molecules/SEMINAR' };

export const seminar = () => seminartwig(seminaryml);
