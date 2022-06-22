/**
 * @typedef {import('@roots/bud').Bud} bud
 *
 * @param {bud} app
 */
module.exports = async (app) => {
  app
    /**
     * Application entrypoints
     *
     * Paths are relative to your resources directory
     */
    .entry({
      app: ['@scripts/app', '@styles/app'],
      editor: ['@scripts/editor', '@styles/editor'],
    })

    /**
     * These files should be processed as part of the build
     * even if they are not explicitly imported in application assets.
     */
     .assets([
      {from: app.path("@src/images"), to: app.path("@dist/images/@file")},
      {from: app.path("@src/fonts"), to: app.path("@dist/fonts/@file")},
    ])

    /**
     * These files will trigger a full page reload
     * when modified.
     */
    .watch('resources/views/**/*', 'app/**/*')

    /**
     * Target URL to be proxied by the dev server.
     *
     * This should be the URL you use to visit your local development server.
     */
    .proxy('http://pros90amapa.test')

    /**
     * Development URL to be used in the browser.
     */
    .serve('http://0.0.0.0:3000');
};
