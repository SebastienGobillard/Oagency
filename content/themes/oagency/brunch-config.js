// See http://brunch.io for documentation.
exports.files = {
  javascripts: {
    joinTo: {
      'js/app.js': /^app/,
      'js/vendor.js': /^node_modules/,
    }
  },
  stylesheets: {
    joinTo: {
      'css/app.css': /^app/,
      'css/vendor.css': /^node_modules/,
    }
  },
};

exports.plugins = {
  browserSync: {
    files: ['*']
  },
  copycat: {
    'fonts': ['node_modules/font-awesome/fonts']
  },
  sass: {
    options: {
      includePaths: ['node_modules/bootstrap/scss'],
      precision: 8
    }
  }
};

exports.watcher = {
  usePolling: true,
  awaitWriteFinish: true
};

exports.modules = {
  autoRequire: {
    'js/app.js': ['initialize'],
  }
};

exports.npm = {
  styles: {
    'font-awesome': ['css/font-awesome.css'],
    'reset-css': ['reset.css'],
  },
  globals: {
    '$': 'jquery',
    'jQuery': 'jquery',
    'Rellax': 'rellax',
    'bootstrap': 'bootstrap',
  }
};

