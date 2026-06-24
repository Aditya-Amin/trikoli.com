import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ToggleControl, TextControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const a = attributes;
		const bp = useBlockProps( { className: `tk-plan${ a.featured ? ' is-featured' : '' }` } );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Plan', 'trikoli' ) }>
						<ToggleControl label={ __( 'Featured (highlighted)', 'trikoli' ) } checked={ a.featured } onChange={ ( v ) => setAttributes( { featured: v } ) } />
						<TextControl label={ __( 'Button URL', 'trikoli' ) } value={ a.buttonUrl } onChange={ ( v ) => setAttributes( { buttonUrl: v } ) } />
					</PanelBody>
				</InspectorControls>
				<div { ...bp }>
					<div className="tk-plan__head">
						<RichText tagName="span" className="tk-plan__name" value={ a.name } onChange={ ( v ) => setAttributes( { name: v } ) } allowedFormats={ [] } />
						<RichText tagName="span" className="tk-plan__badge" value={ a.badge } onChange={ ( v ) => setAttributes( { badge: v } ) } placeholder={ __( 'Badge', 'trikoli' ) } allowedFormats={ [] } />
					</div>
					<div className="tk-plan__price"><RichText tagName="span" className="tk-plan__amount" value={ a.price } onChange={ ( v ) => setAttributes( { price: v } ) } allowedFormats={ [] } /> <RichText tagName="span" className="tk-plan__period" value={ a.period } onChange={ ( v ) => setAttributes( { period: v } ) } allowedFormats={ [] } /></div>
					<RichText tagName="p" className="tk-plan__desc" value={ a.description } onChange={ ( v ) => setAttributes( { description: v } ) } placeholder={ __( 'Plan description…', 'trikoli' ) } />
					<RichText tagName="ul" multiline="li" className="tk-plan__features" value={ a.features } onChange={ ( v ) => setAttributes( { features: v } ) } placeholder={ __( 'Feature…', 'trikoli' ) } />
					<RichText tagName="span" className="tk-btn tk-btn--primary tk-btn--md tk-plan__btn" value={ a.buttonText } onChange={ ( v ) => setAttributes( { buttonText: v } ) } allowedFormats={ [] } />
				</div>
			</>
		);
	},
	save( { attributes } ) {
		const a = attributes;
		const bp = useBlockProps.save( { className: `tk-plan${ a.featured ? ' is-featured' : '' }` } );
		return (
			<div { ...bp }>
				<div className="tk-plan__head">
					<RichText.Content tagName="span" className="tk-plan__name" value={ a.name } />
					{ a.badge && <RichText.Content tagName="span" className="tk-plan__badge" value={ a.badge } /> }
				</div>
				<div className="tk-plan__price"><RichText.Content tagName="span" className="tk-plan__amount" value={ a.price } /> <RichText.Content tagName="span" className="tk-plan__period" value={ a.period } /></div>
				{ a.description && <RichText.Content tagName="p" className="tk-plan__desc" value={ a.description } /> }
				{ a.features && <RichText.Content tagName="ul" className="tk-plan__features" value={ a.features } /> }
				<a className="tk-btn tk-btn--primary tk-btn--md tk-plan__btn" href={ a.buttonUrl }>{ a.buttonText }</a>
			</div>
		);
	},
} );
