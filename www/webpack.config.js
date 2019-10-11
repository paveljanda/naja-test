const path = require('path');

module.exports = {
	entry: './app.js',
	output: {
		path: path.resolve(__dirname, 'dist'),
		filename: 'bundle.js'
	},
	watch: true,
	mode: 'development',
	module: {
		rules: [
			{
				test: /\.js$/,
				loader: 'babel-loader',
				exclude: /nnnnnnode_modules/,
				options: {
					presets: [
						'@babel/preset-env',
						{
							'plugins': ['@babel/plugin-proposal-class-properties']
						}
					]
				}
			}
		]
	}
};
