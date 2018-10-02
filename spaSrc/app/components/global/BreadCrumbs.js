import React from 'react';
import {Link} from 'react-router';

export default class BreadCrumbs extends React.Component{
    render() {
        return (
            <div id="breadcrumbs">
                <div className="container">
                    <ul>
                        <li><Link to="/">Home</Link></li>
                        <li>{this.props.pageTitle}</li>
                    </ul>
                </div>
            </div>
        );
    }
}