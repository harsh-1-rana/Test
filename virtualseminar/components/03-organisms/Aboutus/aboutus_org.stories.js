import aboutustwig from './aboutus_org.twig';
import aboutusyml from './aboutus_org.yml';
import './_aboutus_org.scss';

import 'slick-carousel/slick/slick';
import '../../../node_modules/slick-carousel/slick/slick.scss';
import '../../../node_modules/slick-carousel/slick/slick-theme.css';
import './aboutus_org';

export default { title: 'Organisms/AboutUsorg' };

export const aboutusorg = () => aboutustwig(aboutusyml);
