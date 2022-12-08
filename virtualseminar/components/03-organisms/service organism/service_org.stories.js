import servicesorgtwig from './service_org.twig';
import servicesorgyml from './service_org.yml';

import './_service_org.scss';

export default { title: 'Organisms/SERVICESORGANISM' };

export const servicesorganism = () => servicesorgtwig(servicesorgyml);
