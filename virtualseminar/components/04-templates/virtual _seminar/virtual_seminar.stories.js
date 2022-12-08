import virtualseminarTwig from './virtual_seminar.twig';

import navyml from '../../02-molecules/navbar/navbar.yml';
import heroyml from '../../02-molecules/hero_section/hero_section.yml';
import testimonialyml from '../../02-molecules/testimonials/testimonials.yml';
import seminaryml from '../../02-molecules/seminar_highlights/seminar_highlights.yml';
import aboutusyml from '../../03-organisms/Aboutus/aboutus_org.yml';
import accordianyml from '../../03-organisms/accordianmol/accordianmol.yml';
import serviceyml from '../../03-organisms/service organism/service_org.yml';
import clientsyml from '../../02-molecules/OurClients/clients.yml';
import footeryml from '../../02-molecules/footer/footer.yml';
import videoyml from '../../02-molecules/watch video/watch_video.yml';

import './_virtual_seminar.scss';

/**
 * Storybook Definition.
 */
export default { title: 'Templates/VIRTUALSEMINAR' };

export const virtualseminar = () =>
  virtualseminarTwig({
    ...navyml,
    ...heroyml,
    ...aboutusyml,
    ...serviceyml,
    ...seminaryml,
    ...testimonialyml,
    ...accordianyml,
    ...clientsyml,
    ...footeryml,
    ...videoyml,
  });
