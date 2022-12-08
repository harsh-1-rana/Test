import servicestwig from './services.twig';
import servicesyml from './services.yml';
import './_services.scss';

export default { title: 'Molecules/Services' };

export const service = () => servicestwig(servicesyml);
