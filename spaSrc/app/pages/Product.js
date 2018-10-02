import React from 'react';
import BreadCrumbs from "../components/global/BreadCrumbs";
import Body from "../components/product/Body";



export default class Product extends React.Component{
    render() {
        return (
            <div>
                <BreadCrumbs pageTitle={this.props.params.idProduct}/>
                <Body/>
            </div>
        );
    }

}