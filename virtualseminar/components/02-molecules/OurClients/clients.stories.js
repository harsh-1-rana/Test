import clientstwig from './clients.twig';
import clientsyml from './clients.yml';
import './_clients.scss';

export default { title: 'Molecules/OUR CLIENTS' };

export const Ourclients = () => clientstwig(clientsyml);
