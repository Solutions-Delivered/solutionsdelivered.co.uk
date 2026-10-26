// Directory data: URL, canonical and nav state derived from the file name.
const SITE = 'https://solutionsdelivered.co.uk';

export default {
  permalink: (data) => (data.page.fileSlug === 'home' ? '/' : `/${data.page.fileSlug}/`),
  eleventyComputed: {
    navActive: (data) => data.navKey ?? data.page.fileSlug,
    canonicalUrl: (data) => {
      if (data.noCanonical) return null;
      const url = data.page.url.replace(/\/$/, '');
      return url === '' ? SITE : SITE + url;
    },
  },
};
