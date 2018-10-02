import ReactDom from 'react-dom';
import React from "react";
import App from "../layouts/App";
import Users from '../pages/Users';
import {Router, Route, IndexRoute, browserHistory} from 'react-router';
import Main from "../pages/Main";
import Products from "../pages/Products";

module.exports = function (idRoot) {
    ReactDom.render(
        <Router history={browserHistory}>
            <Route path="/" component={App}>
                <IndexRoute component={Main} />
                <Route path="products/:category" component={Products} />
            </Route>

        </Router>, document.querySelector(idRoot))

    ;
};
