import React from 'react';


export default class BreadCrumbs extends React.Component{
    render() {
        return (
            <div id="breadcrumbs">
                <div className="container">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>{this.props.pageTitle}</li>
                    </ul>
                </div>
            </div>
        );
    }
}