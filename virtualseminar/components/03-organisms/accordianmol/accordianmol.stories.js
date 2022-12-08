import accordianmoltwig from './accordianmol.twig';
import accordianmolyml from './accordianmol.yml';

import './_accordianmol.scss';
import './accordianmol';

export default { title: 'Organisms/ACCORDIAN' };

export const accordian = () => accordianmoltwig(accordianmolyml);
