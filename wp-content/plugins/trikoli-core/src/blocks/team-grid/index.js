import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, useInnerBlocksProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, RangeControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

const TEMPLATE = [ [ 'trikoli/team-member', {} ], [ 'trikoli/team-member', {} ], [ 'trikoli/team-member', {} ], [ 'trikoli/team-member', {} ] ];

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const { columns } = attributes;
		const bp = useBlockProps( { className: `tk-team-grid tk-cols-${ columns }`, style: { '--tk-cols': columns } } );
		const ip = useInnerBlocksProps( bp, { template: TEMPLATE, allowedBlocks: [ 'trikoli/team-member' ], orientation: 'horizontal' } );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Grid', 'trikoli' ) }>
						<RangeControl label={ __( 'Columns', 'trikoli' ) } value={ columns } min={ 2 } max={ 4 } onChange={ ( v ) => setAttributes( { columns: v } ) } />
					</PanelBody>
				</InspectorControls>
				<div { ...ip } />
			</>
		);
	},
	save( { attributes } ) {
		const { columns } = attributes;
		const bp = useBlockProps.save( { className: `tk-team-grid tk-cols-${ columns }`, style: { '--tk-cols': columns } } );
		const ip = useInnerBlocksProps.save( bp );
		return <div { ...ip } />;
	},
} );
