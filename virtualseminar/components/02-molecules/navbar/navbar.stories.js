import navbartwig from './navbar.twig';
import navbaryml from './navbar.yml';
import './_navbar.scss';

export default { title: 'Molecules/Navigation' };

export const navbar = () => navbartwig(navbaryml);
