import React from 'react';


export default class BreadCrumbs extends React.Component{
    render() {
        return (
            <div id="breadcrumbs">
                <div className="container">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Product results</li>
                    </ul>
                </div>
            </div>
        );
    }
}