import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const a = attributes;
		const bp = useBlockProps( { className: 'tk-step' } );
		return (
			<div { ...bp }>
				<RichText tagName="div" className="tk-step__num" value={ a.number } onChange={ ( v ) => setAttributes( { number: v } ) } allowedFormats={ [] } />
				<div className="tk-step__body">
					<RichText tagName="h3" className="tk-step__title" value={ a.title } onChange={ ( v ) => setAttributes( { title: v } ) } placeholder={ __( 'Step title', 'trikoli' ) } />
					<RichText tagName="p" className="tk-step__desc" value={ a.description } onChange={ ( v ) => setAttributes( { description: v } ) } placeholder={ __( 'Step description…', 'trikoli' ) } />
				</div>
			</div>
		);
	},
	save( { attributes } ) {
		const a = attributes;
		const bp = useBlockProps.save( { className: 'tk-step' } );
		return (
			<div { ...bp }>
				<div className="tk-step__num">{ a.number }</div>
				<div className="tk-step__body">
					<RichText.Content tagName="h3" className="tk-step__title" value={ a.title } />
					{ a.description && <RichText.Content tagName="p" className="tk-step__desc" value={ a.description } /> }
				</div>
			</div>
		);
	},
} );
