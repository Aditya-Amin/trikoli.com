import { registerBlockType } from '@wordpress/blocks';
import {
	useBlockProps,
	RichText,
	InspectorControls,
	MediaUpload,
	MediaUploadCheck,
} from '@wordpress/block-editor';
import { PanelBody, SelectControl, TextControl, Button } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const a = attributes;
		const blockProps = useBlockProps( { className: `tk-hero is-${ a.layout }` } );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Hero', 'trikoli' ) }>
						<SelectControl
							label={ __( 'Layout', 'trikoli' ) }
							value={ a.layout }
							options={ [
								{ label: 'Centered', value: 'center' },
								{ label: 'Split (text + image)', value: 'split' },
							] }
							onChange={ ( v ) => setAttributes( { layout: v } ) }
						/>
						<TextControl label={ __( 'Primary button URL', 'trikoli' ) } value={ a.primaryUrl } onChange={ ( v ) => setAttributes( { primaryUrl: v } ) } />
						<TextControl label={ __( 'Secondary button URL', 'trikoli' ) } value={ a.secondaryUrl } onChange={ ( v ) => setAttributes( { secondaryUrl: v } ) } />
					</PanelBody>
					<PanelBody title={ __( 'Image', 'trikoli' ) } initialOpen={ false }>
						<MediaUploadCheck>
							<MediaUpload
								onSelect={ ( m ) => setAttributes( { imageUrl: m.url, imageId: m.id, imageAlt: m.alt } ) }
								allowedTypes={ [ 'image' ] }
								value={ a.imageId }
								render={ ( { open } ) => (
									<Button variant="secondary" onClick={ open }>
										{ a.imageUrl ? __( 'Replace image', 'trikoli' ) : __( 'Select image', 'trikoli' ) }
									</Button>
								) }
							/>
						</MediaUploadCheck>
					</PanelBody>
				</InspectorControls>
				<section { ...blockProps }>
					<div className="tk-hero__content">
						<RichText tagName="span" className="tk-eyebrow" value={ a.eyebrow } onChange={ ( v ) => setAttributes( { eyebrow: v } ) } placeholder={ __( 'EYEBROW', 'trikoli' ) } />
						<RichText tagName="h1" className="tk-hero__title" value={ a.title } onChange={ ( v ) => setAttributes( { title: v } ) } placeholder={ __( 'Your headline here', 'trikoli' ) } />
						<RichText tagName="p" className="tk-hero__desc" value={ a.description } onChange={ ( v ) => setAttributes( { description: v } ) } placeholder={ __( 'Supporting description…', 'trikoli' ) } />
						<div className="tk-hero__btns">
							<RichText tagName="span" className="tk-btn tk-btn--primary tk-btn--lg" value={ a.primaryText } onChange={ ( v ) => setAttributes( { primaryText: v } ) } allowedFormats={ [] } />
							<RichText tagName="span" className="tk-btn tk-btn--outline tk-btn--lg" value={ a.secondaryText } onChange={ ( v ) => setAttributes( { secondaryText: v } ) } placeholder={ __( 'Secondary…', 'trikoli' ) } allowedFormats={ [] } />
						</div>
					</div>
					{ a.layout === 'split' && a.imageUrl && (
						<div className="tk-hero__media"><img src={ a.imageUrl } alt={ a.imageAlt } /></div>
					) }
				</section>
			</>
		);
	},
	save( { attributes } ) {
		const a = attributes;
		const blockProps = useBlockProps.save( { className: `tk-hero is-${ a.layout }` } );
		return (
			<section { ...blockProps }>
				<div className="tk-hero__content">
					{ a.eyebrow && <RichText.Content tagName="span" className="tk-eyebrow" value={ a.eyebrow } /> }
					<RichText.Content tagName="h1" className="tk-hero__title" value={ a.title } />
					{ a.description && <RichText.Content tagName="p" className="tk-hero__desc" value={ a.description } /> }
					<div className="tk-hero__btns">
						{ a.primaryText && <a className="tk-btn tk-btn--primary tk-btn--lg" href={ a.primaryUrl }>{ a.primaryText }</a> }
						{ a.secondaryText && <a className="tk-btn tk-btn--outline tk-btn--lg" href={ a.secondaryUrl }>{ a.secondaryText }</a> }
					</div>
				</div>
				{ a.layout === 'split' && a.imageUrl && (
					<div className="tk-hero__media"><img src={ a.imageUrl } alt={ a.imageAlt } /></div>
				) }
			</section>
		);
	},
} );
