import React from 'react';
import {Link} from 'react-router';

export default class MainMenu extends React.Component{
    render(){
        return (
            <nav id="menu">
                <div className="container">
                    <div className="trigger"></div>
                    <ul>
                        <li><Link to={"/products/new"}>New collection</Link></li>
                        <li><Link to={"/products/necklaces"}>necklaces</Link></li>
                        <li><Link to={"/products/earrings"}>earrings</Link></li>
                        <li><Link to={"/products/rings"}>Rings</Link></li>
                        <li><Link to={"/products/gift cards"}>Gift cards</Link></li>
                        <li><Link to={"/products/promotions"}>Promotions</Link></li>
                    </ul>
                </div>
            </nav>
        );
    }
}