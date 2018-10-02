import ReactDom from 'react-dom';
import React from "react";
import App from "../layouts/App";
import Users from '../pages/Users';
import {Router, Route, IndexRoute, browserHistory} from 'react-router';
import Main from "../pages/Main";
import Products from "../pages/Products";
import Product from "../pages/Product";

module.exports = function (idRoot) {
    ReactDom.render(
        <Router history={browserHistory}>
            <Route path="/" component={App}>
                <IndexRoute component={Main} />
                <Route path="products/:category" component={Products} />
                <Route path="product/:idProduct" component={Product} />
            </Route>

        </Router>, document.querySelector(idRoot))

    ;
};
