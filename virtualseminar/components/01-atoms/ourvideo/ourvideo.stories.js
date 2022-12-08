import ourvideoTwig from './ourvideo.twig';
import ourvideoYml from './ourvideo.yml';

export default { title: 'Atoms/Ourvideo' };

export const ourVideo = () => ourvideoTwig(ourvideoYml);
