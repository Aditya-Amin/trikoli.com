import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const a = attributes;
		const bp = useBlockProps( { className: 'tk-tm' } );
		return (
			<div { ...bp }>
				<div className="tk-tm__mark" aria-hidden="true">“</div>
				<RichText tagName="p" className="tk-tm__quote" value={ a.quote } onChange={ ( v ) => setAttributes( { quote: v } ) } placeholder={ __( 'Testimonial quote…', 'trikoli' ) } />
				<RichText tagName="h4" className="tk-tm__author" value={ a.author } onChange={ ( v ) => setAttributes( { author: v } ) } placeholder={ __( 'Author', 'trikoli' ) } />
				<RichText tagName="span" className="tk-tm__role" value={ a.role } onChange={ ( v ) => setAttributes( { role: v } ) } placeholder={ __( 'Role, Company', 'trikoli' ) } allowedFormats={ [] } />
			</div>
		);
	},
	save( { attributes } ) {
		const a = attributes;
		const bp = useBlockProps.save( { className: 'tk-tm' } );
		return (
			<div { ...bp }>
				<div className="tk-tm__mark" aria-hidden="true">“</div>
				<RichText.Content tagName="p" className="tk-tm__quote" value={ a.quote } />
				<RichText.Content tagName="h4" className="tk-tm__author" value={ a.author } />
				{ a.role && <RichText.Content tagName="span" className="tk-tm__role" value={ a.role } /> }
			</div>
		);
	},
} );
