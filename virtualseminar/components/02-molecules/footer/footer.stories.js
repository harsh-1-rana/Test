import footertwig from './footer.twig';

import footerData from './footer.yml';

import './_footer.scss';

export default { title: 'Molecules/Workshop Footer' };

export const footer = () => footertwig(footerData);
