import aboutustwig from './aboutus.twig';
import aboutusyml from './aboutus.yml';
import './_aboutus.scss';

export default { title: 'Molecules/AboutUs' };

export const card = () => aboutustwig(aboutusyml);
