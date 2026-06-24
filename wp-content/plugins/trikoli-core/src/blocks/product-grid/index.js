import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, useInnerBlocksProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, RangeControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

const TEMPLATE = [ [ 'trikoli/product-card', {} ], [ 'trikoli/product-card', {} ], [ 'trikoli/product-card', {} ] ];

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const { columns } = attributes;
		const bp = useBlockProps( { className: `tk-product-grid tk-cols-${ columns }`, style: { '--tk-cols': columns } } );
		const ip = useInnerBlocksProps( bp, { template: TEMPLATE, allowedBlocks: [ 'trikoli/product-card' ], orientation: 'horizontal' } );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Grid', 'trikoli' ) }>
						<RangeControl label={ __( 'Columns', 'trikoli' ) } value={ columns } min={ 1 } max={ 4 } onChange={ ( v ) => setAttributes( { columns: v } ) } />
					</PanelBody>
				</InspectorControls>
				<div { ...ip } />
			</>
		);
	},
	save( { attributes } ) {
		const { columns } = attributes;
		const bp = useBlockProps.save( { className: `tk-product-grid tk-cols-${ columns }`, style: { '--tk-cols': columns } } );
		const ip = useInnerBlocksProps.save( bp );
		return <div { ...ip } />;
	},
} );
