import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const a = attributes;
		const blockProps = useBlockProps( { className: 'tk-cta' } );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Call To Action', 'trikoli' ) }>
						<TextControl label={ __( 'Button URL', 'trikoli' ) } value={ a.buttonUrl } onChange={ ( v ) => setAttributes( { buttonUrl: v } ) } />
					</PanelBody>
				</InspectorControls>
				<div { ...blockProps }>
					<RichText tagName="h2" className="tk-cta__title" value={ a.title } onChange={ ( v ) => setAttributes( { title: v } ) } placeholder={ __( 'Call to action title', 'trikoli' ) } />
					<RichText tagName="p" className="tk-cta__text" value={ a.text } onChange={ ( v ) => setAttributes( { text: v } ) } placeholder={ __( 'Supporting text…', 'trikoli' ) } />
					<RichText tagName="span" className="tk-btn tk-btn--white tk-btn--lg" value={ a.buttonText } onChange={ ( v ) => setAttributes( { buttonText: v } ) } allowedFormats={ [] } />
				</div>
			</>
		);
	},
	save( { attributes } ) {
		const a = attributes;
		const blockProps = useBlockProps.save( { className: 'tk-cta' } );
		return (
			<div { ...blockProps }>
				<RichText.Content tagName="h2" className="tk-cta__title" value={ a.title } />
				{ a.text && <RichText.Content tagName="p" className="tk-cta__text" value={ a.text } /> }
				{ a.buttonText && <a className="tk-btn tk-btn--white tk-btn--lg" href={ a.buttonUrl }>{ a.buttonText }</a> }
			</div>
		);
	},
} );
