import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText, InspectorControls, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { PanelBody, TextControl, Button } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const a = attributes;
		const bp = useBlockProps( { className: 'tk-prod' } );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Product Card', 'trikoli' ) }>
						<MediaUploadCheck>
							<MediaUpload
								onSelect={ ( m ) => setAttributes( { imageUrl: m.url, imageId: m.id, imageAlt: m.alt } ) }
								allowedTypes={ [ 'image' ] }
								value={ a.imageId }
								render={ ( { open } ) => (
									<Button variant="secondary" onClick={ open }>{ a.imageUrl ? __( 'Replace image', 'trikoli' ) : __( 'Select image', 'trikoli' ) }</Button>
								) }
							/>
						</MediaUploadCheck>
						<TextControl label={ __( 'Link URL', 'trikoli' ) } value={ a.linkUrl } onChange={ ( v ) => setAttributes( { linkUrl: v } ) } />
					</PanelBody>
				</InspectorControls>
				<div { ...bp }>
					<div className="tk-prod__thumb">{ a.imageUrl ? <img src={ a.imageUrl } alt={ a.imageAlt } /> : <span className="tk-prod__ph">🖼</span> }</div>
					<div className="tk-prod__body">
						<RichText tagName="span" className="tk-prod__cat" value={ a.category } onChange={ ( v ) => setAttributes( { category: v } ) } placeholder={ __( 'Category', 'trikoli' ) } allowedFormats={ [] } />
						<RichText tagName="h3" className="tk-prod__title" value={ a.title } onChange={ ( v ) => setAttributes( { title: v } ) } placeholder={ __( 'Product name', 'trikoli' ) } />
						<RichText tagName="p" className="tk-prod__desc" value={ a.description } onChange={ ( v ) => setAttributes( { description: v } ) } placeholder={ __( 'Short description…', 'trikoli' ) } />
						<RichText tagName="span" className="tk-prod__link" value={ a.linkText } onChange={ ( v ) => setAttributes( { linkText: v } ) } allowedFormats={ [] } />
					</div>
				</div>
			</>
		);
	},
	save( { attributes } ) {
		const a = attributes;
		const bp = useBlockProps.save( { className: 'tk-prod' } );
		return (
			<div { ...bp }>
				<div className="tk-prod__thumb">{ a.imageUrl && <img src={ a.imageUrl } alt={ a.imageAlt } /> }</div>
				<div className="tk-prod__body">
					{ a.category && <RichText.Content tagName="span" className="tk-prod__cat" value={ a.category } /> }
					<RichText.Content tagName="h3" className="tk-prod__title" value={ a.title } />
					{ a.description && <RichText.Content tagName="p" className="tk-prod__desc" value={ a.description } /> }
					{ a.linkText && <a className="tk-prod__link" href={ a.linkUrl }>{ a.linkText } <span aria-hidden="true">→</span></a> }
				</div>
			</div>
		);
	},
} );
