// console.log(wp);

// func register a block 
//wp.blocks.registerBlockType();
import block_icons  from "../icons/index";

const {registerBlockType} = wp.blocks;
const {__} = wp.i18n;

registerBlockType('udemy/recipe', {
    title:    __('Recipe', 'recipe'),
    description:   __(
        'Provides a short summary of a recipe.',
        'recipe'
    ),
    // common, formatting, layout, widgets, embed
    category:  'common',
    icon:   block_icons.wapuu,
    keywords: [
        __('Food', 'recipe'),
        __('Ingredients', 'recipe'),
        __('Meal Type', 'recipe')
    ],
    supports: {
        html:  false,
    },
    edit: (props) => { // props conatain the data and functions that you can use to send the data back
        console.log(props);
        return <p>Hello World!</p>
    },
    save: (props) => {
        return <p>Hello World!</p>
    }
});