import herosectwig from './hero_section.twig';
import herosecyml from './hero_section.yml';
import './_hero_section.scss';

export default { title: 'Molecules/Hero' };

export const herosec = () => herosectwig(herosecyml);
