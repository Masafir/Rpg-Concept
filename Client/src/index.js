/**
 * NPM import
 */
import '@babel/polyfill';
import React from 'react';
import { render } from 'react-dom';
import { Provider } from 'react-redux';

/**
 * Local import
 */
import App from 'src/components/App';

import store from 'src/store';

/**
 * Render
 */

const rootComponent = (
  
    <App />
  
);
/* <Provider store={store}> */
/* </Provider> */
const target = document.getElementById('root');

render(rootComponent, target);
