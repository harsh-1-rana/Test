import accordiantwig from './accordian.twig';
import accordianyml from './accordian.yml';
import './_accordian.scss';

export default { title: 'Molecules/Accordian' };

export const accordian = () => accordiantwig(accordianyml);
