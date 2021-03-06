import React from 'react';
import Header from "./Header";

import {Link} from 'react-router';
import MainMenu from "./MainMenu";
import Footer from "./Footer";


export default class App extends React.Component{

    render(){
        return (
            <div>
                <Header/>
                <MainMenu/>
                {this.props.children}
                <Footer/>
            </div>

        );
    }
}