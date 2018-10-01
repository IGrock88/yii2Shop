import ReactDom from 'react-dom';
import React from "react";
import App from "../layouts/App";
import Users from '../pages/Users';
import {Router, Route, IndexRoute, browserHistory} from 'react-router';

module.exports = function (idRoot) {
    ReactDom.render(
        <Router history={browserHistory}>
            <Route path="/" component={App}>
                <IndexRoute component={App} />
                <Route path="users" component={Users} />
            </Route>
        </Router>, document.querySelector(idRoot))

    ;
};
