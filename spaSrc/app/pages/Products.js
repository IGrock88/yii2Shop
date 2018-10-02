import React from 'react';
import BreadCrumbs from "../components/global/BreadCrumbs";
import Body from "../components/products/Body";


export default class Products extends React.Component{
    render() {
        console.log(this.props);
        return (
            <div>
            <BreadCrumbs/>
            <Body/>
            </div>
        );
    }
}