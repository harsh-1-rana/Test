import testimonialstwig from './testimonials.twig';
import testimonialsyml from './testimonials.yml';
import './_testimonials.scss';

export default { title: 'Molecules/TESTIMONIALS' };

export const Testimonials = () => testimonialstwig(testimonialsyml);
