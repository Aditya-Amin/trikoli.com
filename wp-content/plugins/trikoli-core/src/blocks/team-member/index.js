import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText, InspectorControls, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { PanelBody, TextControl, Button } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

const socials = ( a ) => (
	<div className="tk-member__social">
		{ a.linkedin && <a href={ a.linkedin } aria-label="LinkedIn">in</a> }
		{ a.twitter && <a href={ a.twitter } aria-label="X">X</a> }
		{ a.github && <a href={ a.github } aria-label="GitHub">GH</a> }
	</div>
);

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const a = attributes;
		const bp = useBlockProps( { className: 'tk-member' } );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Member', 'trikoli' ) }>
						<MediaUploadCheck>
							<MediaUpload onSelect={ ( m ) => setAttributes( { imageUrl: m.url, imageId: m.id, imageAlt: m.alt } ) } allowedTypes={ [ 'image' ] } value={ a.imageId } render={ ( { open } ) => (
								<Button variant="secondary" onClick={ open }>{ a.imageUrl ? __( 'Replace photo', 'trikoli' ) : __( 'Select photo', 'trikoli' ) }</Button>
							) } />
						</MediaUploadCheck>
						<TextControl label="LinkedIn URL" value={ a.linkedin } onChange={ ( v ) => setAttributes( { linkedin: v } ) } />
						<TextControl label="X / Twitter URL" value={ a.twitter } onChange={ ( v ) => setAttributes( { twitter: v } ) } />
						<TextControl label="GitHub URL" value={ a.github } onChange={ ( v ) => setAttributes( { github: v } ) } />
					</PanelBody>
				</InspectorControls>
				<div { ...bp }>
					<div className="tk-member__photo">{ a.imageUrl ? <img src={ a.imageUrl } alt={ a.imageAlt } /> : <span className="tk-prod__ph">👤</span> }</div>
					<RichText tagName="h3" className="tk-member__name" value={ a.name } onChange={ ( v ) => setAttributes( { name: v } ) } placeholder={ __( 'Full name', 'trikoli' ) } />
					<RichText tagName="p" className="tk-member__role" value={ a.role } onChange={ ( v ) => setAttributes( { role: v } ) } placeholder={ __( 'Role', 'trikoli' ) } />
					{ socials( a ) }
				</div>
			</>
		);
	},
	save( { attributes } ) {
		const a = attributes;
		const bp = useBlockProps.save( { className: 'tk-member' } );
		return (
			<div { ...bp }>
				<div className="tk-member__photo">{ a.imageUrl && <img src={ a.imageUrl } alt={ a.imageAlt } /> }</div>
				<RichText.Content tagName="h3" className="tk-member__name" value={ a.name } />
				{ a.role && <RichText.Content tagName="p" className="tk-member__role" value={ a.role } /> }
				{ socials( a ) }
			</div>
		);
	},
} );
