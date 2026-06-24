import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import metadata from './block.json';

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const a = attributes;
		const blockProps = useBlockProps( { className: 'tk-counter-block' } );
		return (
			<div { ...blockProps }>
				<div className="tk-counter-value">
					<RichText tagName="span" className="tk-counter-prefix" value={ a.prefix } onChange={ ( v ) => setAttributes( { prefix: v } ) } placeholder="" allowedFormats={ [] } />
					<RichText tagName="span" className="tk-counter" value={ a.number } onChange={ ( v ) => setAttributes( { number: v } ) } allowedFormats={ [] } />
					<RichText tagName="span" className="tk-counter-suffix" value={ a.suffix } onChange={ ( v ) => setAttributes( { suffix: v } ) } placeholder="" allowedFormats={ [] } />
				</div>
				<RichText tagName="p" className="tk-counter-label" value={ a.label } onChange={ ( v ) => setAttributes( { label: v } ) } placeholder="Label" />
			</div>
		);
	},
	save( { attributes } ) {
		const a = attributes;
		const blockProps = useBlockProps.save( { className: 'tk-counter-block' } );
		return (
			<div { ...blockProps }>
				<div className="tk-counter-value">
					{ a.prefix && <span className="tk-counter-prefix">{ a.prefix }</span> }
					<span className="tk-counter" data-tk-counter={ a.number }>{ a.number }</span>
					{ a.suffix && <span className="tk-counter-suffix">{ a.suffix }</span> }
				</div>
				{ a.label && <RichText.Content tagName="p" className="tk-counter-label" value={ a.label } /> }
			</div>
		);
	},
} );
