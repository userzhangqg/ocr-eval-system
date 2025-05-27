#!/bin/bash

# 检查是否提供了 docker-compose 文件路径
if [ -z "$1" ]; then
    echo "Usage: $0 docker-compose.yml"
    exit 1
fi

COMPOSE_FILE=$1

# 检查指定的 docker-compose 文件是否存在
if [ ! -f "$COMPOSE_FILE" ]; then
    echo "Error: File '$COMPOSE_FILE' not found."
    exit 1
fi

# 定义导出的目录
EXPORT_DIR="./images"

# 检查导出目录是否存在，不存在则创建
if [ ! -d "$EXPORT_DIR" ]; then
    mkdir -p "$EXPORT_DIR"
    echo "Created directory: $EXPORT_DIR"
fi

# 提取指定 docker-compose 文件中的镜像名称
images=$(cat "$COMPOSE_FILE" | grep 'image:' | awk '{print $2}')

# 导出每个镜像
for image in $images; do
    # 替换镜像名称中的不适合文件名的字符
    sanitized_image_name=$(echo $image | sed 's/[\/:]/_/g')
    output_file="${EXPORT_DIR}/${sanitized_image_name}.tar"
    echo "Saving image: $image as ${output_file}"
    
    # 使用 docker save 导出镜像
    docker save -o "${output_file}" "$image"
    
    # 检查导出是否成功
    if [ $? -eq 0 ]; then
        echo "Successfully saved ${image} to ${output_file}"
    else
        echo "Failed to save ${image}"
    fi
done

