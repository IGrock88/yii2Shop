import React from 'react';
import BreadCrumbs from "../components/global/BreadCrumbs";
import Body from "../components/products/Body";


export default class Products extends React.Component{
    render() {
        return (
            <div>
            <BreadCrumbs pageTitle={this.props.params.category}/>
            <Body/>
            </div>
        );
    }
}