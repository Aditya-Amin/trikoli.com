import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ToggleControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const a = attributes;
		const blockProps = useBlockProps( { className: `tk-faq__item${ a.open ? ' is-open' : '' }` } );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'FAQ Item', 'trikoli' ) }>
						<ToggleControl
							label={ __( 'Open by default', 'trikoli' ) }
							checked={ a.open }
							onChange={ ( v ) => setAttributes( { open: v } ) }
						/>
					</PanelBody>
				</InspectorControls>
				<div { ...blockProps }>
					<RichText
						tagName="div"
						className="tk-faq__q"
						value={ a.question }
						onChange={ ( v ) => setAttributes( { question: v } ) }
						placeholder={ __( 'Question…', 'trikoli' ) }
						allowedFormats={ [] }
					/>
					<div className="tk-faq__a">
						<RichText
							tagName="div"
							className="tk-faq__a-inner"
							value={ a.answer }
							onChange={ ( v ) => setAttributes( { answer: v } ) }
							placeholder={ __( 'Answer…', 'trikoli' ) }
						/>
					</div>
				</div>
			</>
		);
	},
	save( { attributes } ) {
		const a = attributes;
		const blockProps = useBlockProps.save( { className: `tk-faq__item${ a.open ? ' is-open' : '' }` } );
		return (
			<div { ...blockProps }>
				<button className="tk-faq__q" type="button" aria-expanded={ a.open ? 'true' : 'false' }>
					<RichText.Content value={ a.question } />
				</button>
				<div className="tk-faq__a">
					<RichText.Content tagName="div" className="tk-faq__a-inner" value={ a.answer } />
				</div>
			</div>
		);
	},
} );
