import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const a = attributes;
		const blockProps = useBlockProps( { className: 'tk-card' } );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Feature Card', 'trikoli' ) }>
						<TextControl
							label={ __( 'Icon (emoji or character)', 'trikoli' ) }
							value={ a.icon }
							onChange={ ( v ) => setAttributes( { icon: v } ) }
						/>
						<TextControl
							label={ __( 'Link URL', 'trikoli' ) }
							value={ a.linkUrl }
							onChange={ ( v ) => setAttributes( { linkUrl: v } ) }
						/>
					</PanelBody>
				</InspectorControls>
				<div { ...blockProps }>
					<div className="tk-card__icon">{ a.icon }</div>
					<RichText tagName="span" className="tk-pill" value={ a.pill } onChange={ ( v ) => setAttributes( { pill: v } ) } placeholder={ __( 'PILL', 'trikoli' ) } />
					<RichText tagName="h3" className="tk-card__title" value={ a.title } onChange={ ( v ) => setAttributes( { title: v } ) } placeholder={ __( 'Card title', 'trikoli' ) } />
					<RichText tagName="p" className="tk-card__desc" value={ a.description } onChange={ ( v ) => setAttributes( { description: v } ) } placeholder={ __( 'Short description…', 'trikoli' ) } />
					<RichText tagName="ul" multiline="li" className="tk-card__list" value={ a.items } onChange={ ( v ) => setAttributes( { items: v } ) } placeholder={ __( 'List item…', 'trikoli' ) } />
					<RichText tagName="span" className="tk-card__link" value={ a.linkText } onChange={ ( v ) => setAttributes( { linkText: v } ) } allowedFormats={ [] } />
				</div>
			</>
		);
	},
	save( { attributes } ) {
		const a = attributes;
		const blockProps = useBlockProps.save( { className: 'tk-card' } );
		return (
			<div { ...blockProps }>
				{ a.icon && <div className="tk-card__icon">{ a.icon }</div> }
				{ a.pill && <RichText.Content tagName="span" className="tk-pill" value={ a.pill } /> }
				<RichText.Content tagName="h3" className="tk-card__title" value={ a.title } />
				{ a.description && <RichText.Content tagName="p" className="tk-card__desc" value={ a.description } /> }
				{ a.items && <RichText.Content tagName="ul" className="tk-card__list" value={ a.items } /> }
				{ a.linkText && (
					<a className="tk-card__link" href={ a.linkUrl }>
						<RichText.Content value={ a.linkText } /> <span aria-hidden="true">→</span>
					</a>
				) }
			</div>
		);
	},
} );
