import watchvideotwig from './watch_video.twig';
import watchvideoymlyml from './watch_video.yml';
import './watch_video.scss';

export default { title: 'Molecules/Watch Our Video' };

export const ourvideo = () => watchvideotwig(watchvideoymlyml);
